<?php

namespace App\Http\Livewire;

use App\Models\Complaint;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Contracts\View\Factory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\WithPagination;

/**
 * Class Complaints
 */
class Complaints extends Component
{
    use WithPagination;

    /**
     * @var string
     */
    public $searchComplaint = '';

    /**
     * @var string[]
     */
    protected $listeners = ['refresh' => '$refresh', 'deleteComplaint'];

    /**
     * @var int
     */
    private $perPage = 15;

    /**
     * @return string
     */
    public function paginationView(): string
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
     * @param $inquiryId
     */
    public function deleteComplaint($complaintId)
    {
        $complaint = Complaint::findOrFail($complaintId);
        $complaint->delete();
        $this->dispatchBrowserEvent('delete');
    }
    
    public function updatingSearchSalaryCurrencies()
    {
        $this->resetPage();
    }

    /**
     * @return Application|Factory|View
     */
    public function render()
    {
        $complaints = $this->complaint();
        
        return view('livewire.complaints', compact('complaints'));
    }

    /**
     * @return LengthAwarePaginator
     */
    public function complaint(): LengthAwarePaginator
    {
        $query = Complaint::query()->select('complaints.*');

        $query->when(isset($this->searchComplaint) && $this->searchComplaint != "", function (Builder $q) {
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
