<?php
 
namespace Drupal\movie_reservation\Controller;
use \Drupal\node\Entity\Node;
use Symfony\Component\HttpFoundation\Request;
  
  class MovieReservationController  {
  
    public function movieReservation() {
  
      $genres = \Drupal::entityTypeManager()
        ->getStorage('taxonomy_term')
        ->loadByProperties(['vid' => 'genres']);

      $query = \Drupal::entityQuery('node')
        ->condition('type', 'movie');
      
      $movies = Node::loadMultiple($query->execute());
      
      return array(
          '#theme' => 'information-movie',
          '#movies' => $movies,
          '#title' => 'Welcome to our movie reservation page',
          '#genres' => $genres
      );
    }
  }
