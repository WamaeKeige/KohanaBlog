<?php

class Model_Post extends ORM{
 //protected $_table_name='post';
 public function rules(){
  return array(
    'title' => array(
      array('not_empty')
    ),
    'body' =>array(
      array('not_empty')
    )
  );
 }
}
