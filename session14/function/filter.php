<?php  
	function filterSearch($_POST) {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $created = $_POST['created'];

    //Do real escaping here

    $query = "SELECT * FROM products";
    $conditions = array();

    if(! empty($name)) {
      $conditions[] = "name='$name'";
    }
    if(! empty($description)) {
      $conditions[] = "description='$description'";
    }
    if(! empty($price)) {
      $conditions[] = "price='$price'";
    }
    if(! empty($created)) {
      $conditions[] = "created='$created'";
    }

    $sql = $query;
    if (count($conditions) > 0) {
      $sql .= " WHERE " . implode(' AND ', $conditions);
    }

    $result = mysql_query($sql);

    return $result;
}

?>