<?php

namespace App\MediaLibrary;

use App\Models\BrandingSliders;
use App\Models\Candidate;
use App\Models\FrontSetting;
use App\Models\HeaderSlider;
use App\Models\ImageSlider;
use App\Models\Post;
use App\Models\Setting;
use App\Models\Testimonial;
use App\Models\User;
use Spatie\MediaLibrary\Models\Media;
use Spatie\MediaLibrary\PathGenerator\PathGenerator;

/**
 * Class CustomPathGenerator
 * @package App\MediaLibrary
 */
class CustomPathGenerator implements PathGenerator
{
    /**
     * @param  Media  $media
     *
     * @return string
     */
    public function getPath(Media $media): string
    {
        $path = '{PARENT_DIR}'.DIRECTORY_SEPARATOR.$media->id.DIRECTORY_SEPARATOR;

        switch ($media->collection_name) {
            case Setting::PATH;
                return str_replace('{PARENT_DIR}', 'settings', $path);
            case Candidate::RESUME_PATH;
                return str_replace('{PARENT_DIR}', 'resumes', $path);
            case Testimonial::PATH;
                return str_replace('{PARENT_DIR}', 'testimonials', $path);
            case User::PROFILE;
                return str_replace('{PARENT_DIR}', 'profile-pictures', $path);
            case 'service-thumbnail';
                return str_replace('{PARENT_DIR}', 'service-thumbnail', $path);
            case 'service-banner';
                return str_replace('{PARENT_DIR}', 'service-banner', $path);

            case 'profile_pictures';
                return str_replace('{PARENT_DIR}', 'profile_pictures', $path);
            case 'passport_front';
                return str_replace('{PARENT_DIR}', 'passport_front', $path);
            case 'passport_back';
                return str_replace('{PARENT_DIR}', 'passport_back', $path);
            case 'liability_copy';
                return str_replace('{PARENT_DIR}', 'liability_copy', $path);
            case 'first_aid_certificate';
                return str_replace('{PARENT_DIR}', 'first_aid_certificate', $path);
            case 'vog_certificate_file';
                return str_replace('{PARENT_DIR}', 'vog_certificate_file', $path);
            case Post::PATH:
                return str_replace('{PARENT_DIR}', Post::PATH, $path);
            case ImageSlider::PATH:
                return str_replace('{PARENT_DIR}', ImageSlider::PATH, $path);
            case HeaderSlider::PATH:
                return str_replace('{PARENT_DIR}', HeaderSlider::PATH, $path);
            case BrandingSliders::PATH:
                return str_replace('{PARENT_DIR}', BrandingSliders::PATH, $path);
            case FrontSetting::PATH:
                return str_replace('{PARENT_DIR}', FrontSetting::PATH, $path);
            case 'default' :
                return '';
        }
    }

    /**
     * @param  Media  $media
     *
     * @return string
     */
    public function getPathForConversions(Media $media): string
    {
        return $this->getPath($media).'thumbnails/';
    }

    /**
     * @param  Media  $media
     *
     * @return string
     */
    public function getPathForResponsiveImages(Media $media): string
    {
        return $this->getPath($media).'rs-images/';
    }
}
