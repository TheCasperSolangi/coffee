<?php 
/* C:\xampp\htdocs\tasty\themes\tastyigniter-orange/_pages/local\reviews.blade.php */
class Pagic65dd3bf08918e361859384_a3e41c9dd65a529daa7ce8098e1a4bf4Class extends \Main\Template\Code\PageCode
{

public function onStart()
{
    if (!View::shared('showReviews')) {
        flash()->error(lang('igniter.local::default.review.alert_review_disabled'))->now();

        return Redirect::to($this->controller->pageUrl($this['localReview']->property('redirectPage')));
    }
}

}
