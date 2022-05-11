<?php

namespace Drupal\movie_reservation\Controller;

class MovieReservationController{

    public function movieReservation() {
   
      $query = \Drupal::entityQuery('node')
        ->condition('type','movie');
      $movies = \Drupal\node\Entity\Node::loadMultiple($query->execute());

       return array(
          '#theme' => 'information-movie',
          '#movies' => $movies,
          '#title' => 'Welcome to our movie reservation page'
        );
    }
  }
?>
