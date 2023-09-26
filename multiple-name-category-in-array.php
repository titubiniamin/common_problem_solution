<!-- JUST APPEND [] TO THE NAME -->
<form method="post" action="">
    <label>Favorite Colors</label>
    <input type="text" name="name[0]" required value="red">
    <select name="category[0][]" multiple>
        <option value="aa">aa</option>
        <option value="bb">bb</option>
        <option value="cc">cc</option>
        <option value="dd">dd</option>
    </select>

    <input type="text" name="name[1]" required value="green">
    <select name="category[1][]" multiple>
        <option value="aa">aa</option>
        <option value="bb">bb</option>
        <option value="cc">cc</option>
        <option value="dd">dd</option>
    </select>

    <input type="text" name="name[2]" required value="blue">
    <select name="category[2][]" multiple>
        <option value="aa">aa</option>
        <option value="bb">bb</option>
        <option value="cc">cc</option>
        <option value="dd">dd</option>
    </select>

    <input type="submit" value="Submit" name="submit">
</form>

<?php
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $categories=$_POST['category'];


    for($i=0;$i<count($name);$i++){
        echo $name[$i];
        foreach($categories[$i] as $category){
            echo "<pre>";
            var_dump($category);
        }
    }


//print_r( $categories[0]);
//    for($i=0;$i<count($colors);$i++){
////        echo $colors[$i];
//        echo $categories[$i];
//        echo "<br>";
//    }
//    foreach ($colors as $color=>$value){
//       echo $color;
//    }
//    echo $_POST['colors'];
//    foreach ($_POST["colors"] as $color) {
//        echo "$color<br>";
//    }
}
// (A) $_POST WILL CONTAIN ALL THE POSTED FORM DATA AS USUAL
//print_r($_POST);

// (B) BUT $_POST["COLORS"] WILL BE AN ARRAY
