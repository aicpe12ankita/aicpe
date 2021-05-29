<?php
  /* Yogesh This Helper Used for All Validation Function */
  function validate($data_array=array(),$validate_rules=array(),&$current_instance=NULL)
  {

    $Msg=NULL;;
    foreach($data_array as $key => $row)
    {
      if(isset($validate_rules['rules'][$key]))
      {
        if(is_array($validate_rules['rules'][$key]))
        {
          foreach($validate_rules['rules'][$key] as $keyValidation => $KeyValue)
          {
            
            if($keyValidation)
            {
              
              if(function_exists($keyValidation) && !is_array($KeyValue))
              {
                
                if($keyValidation($row))
                {
                  
                  if(isset($validate_rules['messages'][$key][$keyValidation]))
                  {
                    $Msg    = $validate_rules['messages'][$key][$keyValidation];
                    break;
                  }
                }
              }
              elseif(function_exists($keyValidation) && is_array($KeyValue))
              {
                
                if(array_key_exists("Param",$KeyValue))
                {
                  
                  $ParamArray = array();
                  foreach($KeyValue['Param'] as $ParamKey => $ParamValue)
                  {
                    $ParamArray[] = is_numeric($ParamKey)?$data_array[$ParamValue]:$ParamValue;  
                  }
                  
                  $FunctionResult = call_user_func_array($keyValidation,$ParamArray);
                  if($FunctionResult != 1)
                  {
                    if(isset($validate_rules['messages'][$key][$keyValidation]))
                    {
                      $Msg    = $validate_rules['messages'][$key][$keyValidation];
                      break;
                    }
                  }
                }
              }
              elseif(method_exists($current_instance,$keyValidation)   && !is_array($KeyValue))
              {
                if($current_instance->$keyValidation($row))
                {
                  if(isset($validate_rules['messages'][$key][$keyValidation]))
                  {
                    $Msg  = $validate_rules['messages'][$key][$keyValidation];
                  }
                }
              }
              elseif(method_exists($current_instance,$keyValidation)   && is_array($KeyValue))
              {
                if(array_key_exists("Param",$KeyValue))
                {
                  $ParamArray = array();
                  foreach($KeyValue['Param'] as $ParamKey => $ParamValue)
                  {
                    $ParamArray[] = is_numeric($ParamKey)?$data_array[$ParamValue]:$ParamValue;  
                  }
                  //dump($KeyValue);
                  $FunctionResult = call_user_method_array($keyValidation,$current_instance,$ParamArray);
                  //dump($FunctionResult);
                  if($FunctionResult != 1)
                  {
                    if(isset($validate_rules['messages'][$key][$keyValidation]))
                    {
                      $Msg    = $validate_rules['messages'][$key][$keyValidation];
                      break;
                    }
                  }
                }
              }
            }
          }
        }
      }
      if($Msg!=NULL)
      break;
      
    }
    return $Msg;
  }


  function required($value="")
  {
    if(!is_array($value))
    {
      return (trim($value)===""?true:false);
    }
    else
    {
      if(empty($value)) return true;
      else
      foreach ($value as $data_value)
      {
          if(required($data_value)) return true;
      }
    }
    return false;
  }

  function digits($value="")
  {
    return !is_numeric($value);
  }

  function email($value="")
  {
    return !filter_var($value,FILTER_VALIDATE_EMAIL);
  }

  function equal($value1,$value2)
  {
    return ($value1==$value2)?1:2;
  }

  function minlength($value,$Number)
  {
    return (strlen($value)==$Number)?1:2;
  }

  function minval($value,$min_value)
  {
    return ($value>=$min_value)?1:2;
  }

  function maxval($value,$max_value)
  {
    return ($value<=$max_value)?1:2;
  }

  function url($url)
  {
    return ((!filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_HOST_REQUIRED)===FALSE)?true:false);

  }




      
      