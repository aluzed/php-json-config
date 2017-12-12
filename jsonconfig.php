/**
* Simple JSON file parser
*
* Returns an object while our fields from a given json file path.
*
* author: Alexandre PENOMBRE <aluzed@gmail.com>
*/
<?php

namespace JSONConfig;

class JSONConfig {
  var $__currentPath;

  /**
  * Constructor
  *
  * @param {String} $path : path of the file
  */
  function __construct($path) {
    $this->__currentPath = $path;
    $file = $this->read($this->__currentPath);

    foreach($file as $field => $val) {
      $this->$field = $val;
    }
  }

  /**
  * Static json file reader
  *
  * @param {String} $path : path of the file
  * @return {Array} : parsed file
  */
  public static function read($path) {
    $file_to_str = file_get_contents($path);

    if(!file_exists($path))
      throw new Exception('Error, cannot resolve path.');

    $file = json_decode($file_to_str, true);

    return $file;
  }
}

?>
