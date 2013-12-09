 <?php
/**
 * Holding a instance of CPersia to enable use of $this in subclasses and provide some helpers.
 *
 * @package PersiaCore
 */
class CObject {

  /**
   * Members
   */
  protected $pe;
  protected $config;
  protected $request;
  protected $data;
  protected $db;
  protected $views;
  protected $session;
  protected $user;


  /**
   * Constructor, can be instantiated by sending in the $pe reference.
   */
  protected function __construct($pe=null) {
    if(!$pe) {
      $pe = CPersia::Instance();
    }
    $this->pe       = &$pe;
    $this->config   = &$pe->config;
    $this->request  = &$pe->request;
    $this->data     = &$pe->data;
    $this->db       = &$pe->db;
    $this->views    = &$pe->views;
    $this->session  = &$pe->session;
    $this->user     = &$pe->user;
  }


  /**
   * Wrapper for same method in CPersia. See there for documentation.
   */
  protected function RedirectTo($urlOrController=null, $method=null, $arguments=null) {
    $this->pe->RedirectTo($urlOrController, $method, $arguments);
  }


  /**
   * Wrapper for same method in CPersia. See there for documentation.
   */
  protected function RedirectToController($method=null, $arguments=null) {
    $this->pe->RedirectToController($method, $arguments);
  }


  /**
   * Wrapper for same method in CPersia. See there for documentation.
   */
  protected function RedirectToControllerMethod($controller=null, $method=null, $arguments=null) {
    $this->pe->RedirectToControllerMethod($controller, $method, $arguments);
  }


  /**
   * Wrapper for same method in CPersia. See there for documentation.
   */
  protected function AddMessage($type, $message, $alternative=null) {
    return $this->pe->AddMessage($type, $message, $alternative);
  }


  /**
   * Wrapper for same method in CPersia. See there for documentation.
   */
  protected function CreateUrl($urlOrController=null, $method=null, $arguments=null) {
    return $this->pe->CreateUrl($urlOrController, $method, $arguments);
  }


}
   