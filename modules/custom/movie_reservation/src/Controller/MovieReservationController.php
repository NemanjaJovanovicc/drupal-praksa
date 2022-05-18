<?php
 
namespace Drupal\movie_reservation\Controller;
use \Drupal\node\Entity\Node;
use Symfony\Component\HttpFoundation\Request;
  
  class MovieReservationController {
  
    public function movieReservation() {
  
      $genres = \Drupal::entityTypeManager()
        ->getStorage('taxonomy_term')
        ->loadByProperties(['vid' => 'genres']);

      $reservation_cinema = \Drupal::entityTypeManager()
        ->getStorage('taxonomy_term')
        ->loadByProperties(['vid' => 'reservation_cinema']);

      $genre_id = \Drupal::request()->query->get('genre');

      $query = \Drupal::entityQuery('node')
        ->condition('type', 'movie');

      if(isset($genre_id)){
        $query->condition('field_genre', $genre_id);
      }

      $movies = Node::loadMultiple($query->execute());
      
      return array(
          '#theme' => 'information-movie',
          '#movies' => $movies,
          '#title' => 'Welcome to our movie reservation page',
          '#genres' => $genres,
          '#reservation_cinema' => $reservation_cinema
      );
    }
  }
