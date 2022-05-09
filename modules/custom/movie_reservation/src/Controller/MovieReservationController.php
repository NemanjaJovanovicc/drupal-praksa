<?php

namespace Drupal\movie_reservation\Controller;

use Drupal\Core\Controller\ControllerBase;
/*
class MovieReservationController extends ControllerBase{
    public function movieReservation(){
        return [
            '#title' => 'Movie Reservation',
            '#markup' => '<h3>Welcome to Movie Reservation Page</h3>'
        ];
    }

    public function information(){
        $data = array(
            'name'=>'Ime filma',
            'description'=>'Opis filma'
        );

        return [
            '#title'=>'Information Page, Movie Reservation',
            '#theme'=>'information_movie',
            '#items'=>$data
        ];
    }
}
*/
class MovieReservationController {

    public function showAllMovies()
    {
        $movies = [
            ['title' => 'Movie1'],
            ['title' => 'Movie2'],
        ];

        return [
            '#theme' => 'movie-reservation',
            '#movies' => $movies,
            '#title' => 'Movies'
        ];
        $query = \Drupal::entityQuery('node_field_data')
          ->condition('type', 'article');
        $movies = \Drupal\node\Entity\Node::loadMultiple($query->execute());

        return array(
            '#theme' => 'movie-reservation',
            '#movies' => $movies,
            '#title' => 'Welcome to Movie Reservation Page'
        );
    }
}





?>