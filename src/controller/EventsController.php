<?php

require_once WWW_ROOT . 'controller' . DS . 'Controller.php';
require_once WWW_ROOT . 'dao' . DS . 'EventDAO.php';

class EventsController extends Controller {

  private $eventDAO;

  function __construct() {
    $this->eventDAO = new EventDAO();
  }

  public function index() {
    $conditions = array();
    $events = $this->eventDAO->selectAll();
    $this->set('events', $events);

    if( !empty( $_POST ) ){

      $this->handleRegistration();

    }
  }

  private function handleRegistration(){
		$data = [
      'email' => $_POST['email']
    ];

    if( $this->eventDAO->insert( $data ) ){

	      $_SESSION['info'] = "Uw email adres werd correct opgeslaan";
	      $this->redirect('index.php?page=succes');

      }else {

	$_SESSION['error'] = $this->EventDAO->validateRegistrationData($data);
	$this->redirect('index.php?page=oeps'); //
}
	}

  public function detail() {
    if( !isset( $_GET["id"]) ){
    			$_SESSION["error"] = ['Dit evenement bestaat niet'];
    			$this->redirect('index.php');
    		}

    		$id = $_GET["id"];
    		$event = $this->eventDAO->selectById($id);
    		if( !$event ){
    			$_SESSION["error"] = ['Dit evenement bestaat niet'];
    			$this->redirect('index.php');
    		}

    		$this->set('event', $event);

  }

  public function oeps() {

  }

  public function succes() {

  }

  //public function search() {
    //if( !isset( $_GET["query"]) ){
      //$this->redirect("index.php");
    //}

    // $events = $this->eventDAO->search( $_GET["query"] );

    // $this->set('events', $events);

  //}

  public function agenda() {

    $conditions = array();

    //$conditions = $this->eventDAO->search($_GET["query"]);

    //example: search on title
    if(isset( $_GET["query"])) {
    $conditions[0] = array(
       'field' => 'title',
       'comparator' => 'like',
       'value' => $_GET["query"]
     );
   } else {
     // redirect naar 404 pagina
   }

    //example: search on location_id
    // $conditions[0] = array(
    //   'field' => 'location_id',
    //   'comparator' => '=',
    //   'value' => 4
    // );

    //example: search on location name
    // $conditions[0] = array(
    //   'field' => 'location',
    //   'comparator' => 'like',
    //   'value' => 'strand'
    // );

    //example: search on organiser id
    // $conditions[0] = array(
    //   'field' => 'organiser_id',
    //   'comparator' => '=',
    //   'value' => '1'
    // );

    //example: search on organiser id
    // $conditions[0] = array(
    //   'field' => 'organiser',
    //   'comparator' => 'LIKE',
    //   'value' => 'gent'
    // );

    //example: search on tag name
    // $conditions[0] = array(
    //   'field' => 'tag',
    //   'comparator' => '=',
    //   'value' => 'gastvrijheid'
    // );

    //example: events ending in may 2017
    // $conditions[0] = array(
    //   'field' => 'end',
    //   'comparator' => '>=',
    //   'value' => '2017-05-01 00:00:00'
    // );
    // $conditions[1] = array(
    //   'field' => 'end',
    //   'comparator' => '<',
    //   'value' => '2017-06-01 00:00:00'
    // );

    //example: events happening on march first
    // $conditions[0] = array(
    //   'field' => 'start',
    //   'comparator' => '<=',
    //   'value' => '2017-03-01 00:00:00'
    // );
    // $conditions[1] = array(
    //   'field' => 'end',
    //   'comparator' => '>=',
    //   'value' => '2017-03-01 00:00:00'
    // );

    //example: search on location, with certain end date + time
    // $conditions[0] = array(
    //   'field' => 'location',
    //   'comparator' => 'like',
    //   'value' => 'voortuin'
    // );
    // $conditions[1] = array(
    //   'field' => 'end',
    //   'comparator' => '=',
    //   'value' => '2017-05-01 19:00'
    // );

    $events = $this->eventDAO->search($conditions);
    $this->set('events', $events);
  }

}
