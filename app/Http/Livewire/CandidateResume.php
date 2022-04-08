<?php

namespace App\Http\Livewire;

use App\Models\Candidate;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Contracts\View\Factory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\WithPagination;
use Spatie\MediaLibrary\Models\Media;

/**
 * Class CandidateResume
 */
class CandidateResume extends Component
{
    use WithPagination;

    /**
     * @var string
     */

    public $searchByResume = '';
    /**
     * @var string[]
     */

    protected $listeners = ['refresh' => '$refresh', 'deleteCandidateResume'];
    /**
     * @var string
     */

    protected $paginationTheme = 'bootstrap';
    /**
     * @var int
     */

    private $perPage = 8;

    /**
     * @return string
     */

    public function paginationView()
    {
        return 'livewire.custom-pagenation-jobs';
    }

    /**
     * @param $lastPage
     */

    public function nextPage($lastPage)
    {
        if ($this->page < $lastPage) {
            $this->page = $this->page + 1;
        }
    }

    public function previousPage()
    {
        if ($this->page > 1) {
            $this->page = $this->page - 1;
        }
    }

    /**
     * @param  int  $resumeId
     */

    public function deleteCandidateResume($resumeId)
    {
        $resume = Media::findOrFail($resumeId);
        $resume->delete();
        $this->dispatchBrowserEvent('delete');
    }

    /**
     * @return Application|Factory|View
     */

    public function render()
    {
        $candidateResumes = $this->candidateResume();

        return view('livewire.candidate-resume', compact('candidateResumes'));
    }

    /**
     * @return LengthAwarePaginator
     */
    public function candidateResume()
    {
        $query = Candidate::with(['user', 'media'])->without('user.country', 'user.state', 'user.city');
        $query->when($this->searchByResume == "", function (Builder $q) {
            $q->whereHas('media', function (Builder $query) {
                $query->whereNotNull('file_name');
            });
        });

        $query->when(isset($this->searchByResume) && $this->searchByResume != "", function (Builder $q) {

            $q->WhereHas('user', function (Builder $query) {
                $query->Where('first_name', 'like',
                    '%'.strtolower($this->searchByResume).'%')
                    ->orWhere('last_name', 'like',
                        '%'.strtolower($this->searchByResume).'%');
            })
                ->WhereHas('media', function (Builder $q1) {
                    $q1->whereNotNull('file_name');
                })
                ->orWhereHas('media', function (Builder $q2) {
                    $q2->Where('custom_properties->title', 'like',
                        '%'.strtolower($this->searchByResume).'%');
                });
        });

        $all = $query->paginate($this->perPage);
        $currentPage = $all->currentPage();
        $lastPage = $all->lastPage();
        if ($currentPage > $lastPage) {
            $this->page = $lastPage;
            $all = $query->paginate($this->perPage);
        }

        return $all;
    }
}
