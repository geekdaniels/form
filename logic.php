<?php

require_once 'database.php';

class Processpanel{

 public function __construct(){

  $this->ksdb = new Database;
  $this->base = (object) '';
  $this->base->url = "http://".$_SERVER['SERVER_NAME'].'/lotus';


 }
}

/**
 *
 */
class Logic extends Processpanel
{

 public function __construct()
 {
  parent::__construct();

  if (!empty($_GET['action'])) {
   switch ($_GET['action']) {
    case 'create':
     $this->addPost();
     break;

    case 'save':
     $this->savePost();
     break;

    case 'delete':
     $this->deletePost();

    default:
     $this->listPosts();
     break;
   }
  }else{
   $this->listPosts();
  }
 }

 public function listPosts(){

  require_once 'form.php';
 }

 /**
     * @return bool
     */
 public function savePost(){

  $post = $_POST['post'];
  $errors=array();


  //        remember to check use later
  //        $array = $format = $return = array();
  if(empty($post['title'])){
   $errors[] = 'The Title field is empty';
   $errors = implode(",", $errors);
   header("Location: http://localhost/lotus/index.php?error=$errors&action=create");
   return false;
  }
  if (empty($post['content'])) {
   $errors[] = 'The Description field is empty';
   $errors = implode(",", $errors);
   header("Location: http://localhost/lotus/index.php?error=$errors&action=create");
   return false;
  }
  else {

    echo 'After all errors has been checked! <br/>';
    echo $size;
    echo  $post['title'];
    echo   $post['content'];
    echo $target_path;


    // Success
    // Save a corresponding entry to the database

    $post = $_POST['post'];
    $content = $post['content'];
    $title = $post['title'];
    $author_id = $post['author_id'];
    $episode_id = $post['post_total'] + 1;

    try {
     $queryStr = 'INSERT INTO post SET
     content = :content,
     title = :title,
     date = CURDATE(),
     audio_name = :audio_name,
     author_id = :author_id,
     episode_id = :episode_id';

     $query = $this->ksdb->db->prepare($queryStr);
     $query->bindValue(':content', $content);
     $query->bindValue(':title', $title);
     $query->bindValue(':audio_name', $filename);
     $query->bindValue(':episode_id', $episode_id);
     $query->bindValue(':author_id', $author_id);
     $result = $query->execute();
     $add = $query->rowCount();
    }

    catch (PDOException $e) {
     echo $e->getMessage();
    }

    //		Check if it was successfully added to the database

    if (!empty($add)) {

     $_SESSION['post_total'] = $_SESSION['post_total'] + 1;

     try{
      $row_count = 'SELECT count(episode_id) FROM post WHERE author_id = :author_id';
      $row_query = $this->ksdb->db->prepare($row_count);
      $row_query->bindValue(':author_id', $author_id);
      $row_query->execute();
      $new_result = $row_query->fetch();
      $episode_count = $new_result[0];
     }
     catch(PDOEception $e){
      echo $e->getMessage();
     }
     try{
      $update = 'UPDATE author SET post_sum_total = :post_sum_total WHERE id = :author_id';
      $update_query = $this->ksdb->db->prepare($update);
      $update_query->bindValue(':post_sum_total', $episode_count);
      $update_query->bindValue(':author_id', $author_id);
      $update_query->execute();
     }
     catch(PDOEception $e){
      echo $e->getMessage();
     }

     $status = 'Your data has been Submitted successfully.';
     header("Location: http://localhost/lotus/index.php?$status");

    } else {
     $status = 'There has been an error saving. Please try again.';
     header("Location: http://localhost/lotus/index.php.php?action=create");
    }



  }





 }

public function addPost(){
  require_once 'form.php';
 }

}

$admin =  new Processpanel();


//the end!
