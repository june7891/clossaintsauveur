<?php

function flash($name = '', $message = '', $class = 'error')
{
    if (!empty($name)) {
        if (!empty($message) && empty($_SESSION[$name])) {
            $_SESSION[$name] = $message;
            $_SESSION[$name . '_class'] = $class;
        } else if (empty($message) && !empty($_SESSION[$name])) {
            $class = !empty($_SESSION[$name . '_class']) ? $_SESSION[$name . '_class'] : $class;
            echo '<div class="' . $class . '" >' . $_SESSION[$name] . '</div>';
            unset($_SESSION[$name]);
            unset($_SESSION[$name . '_class']);
        }
    }

}


function getDatesFromRange($start_date, $end_date, $date_format = 'Y-m-d')
   {
      $dates_array = array();
      for ($x = strtotime($start_date); $x <= strtotime($end_date); $x += 86400) {
         array_push($dates_array, date($date_format, $x));
      }

      return $dates_array;
   }