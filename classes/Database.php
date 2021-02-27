<?php
require "../php_Data_object.php";

$database = new Database;

$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

if($_POST['submit']){
    $title = $post['title'];
    $body = $post['body'];
    

    $database->query("INSERT INTO posts (title, body) VALUES (:title, :body)");
    $database->bind(':title', $title);
    $database->bind(':body', $body);
    $database->execute();
    // if($database->lastInsertID()){
    //     echo "<p>Post Added</p>";
    // }
} 

// fetch data use 
$database->query('SELECT * FROM posts');

// // use condition in fetch data 
// $database->query('SELECT * FROM posts WHERE id = :id');
// $database->bind(':id', 1);

$rows = $database->resultset();

?>
<!-- create form  -->
<h1>Add Form</h1>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
<label for="">Post Title</label> <br>
<input type="text" name="title" placeholder="Add title..."> <br>
<label for="body">Post Body</label> <br>
<textarea name="body" id="body" cols="30" rows="10"></textarea><br> <br>
<input type="submit" name="submit" value="Submit">
</form>

<h1>Posts</h1>
<div>
<?php foreach($rows as $row){ ?>
   <div>
    <h3><?php echo $row['title'] ?></h3>
    <p><?php echo $row['body'] ?></p>
   </div>

<?php }; ?>

</div>