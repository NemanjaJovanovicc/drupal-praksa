<?php

namespace Drupal\movie_reservation\Controller;

use Drupal\Core\Controller\ControllerBase;

class MovieReservationController extends ControllerBase{
    public function movieReservation(){
        return [
            '#title' => 'Movie Reservation',
            '#markup' => '<h3>Welcome to Movie Reservation Page</h3>'
        ];
    }
}
?>