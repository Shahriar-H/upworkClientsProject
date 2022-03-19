<?php 

    $connection = mysqli_connect('localhost','root','','upp');

    if(isset($_POST['submit'])){
        $name= $_POST['name'];
        $bod = $_POST['bod'];
        $cognome = $_POST['cognome'];
        $cellurare = $_POST['cellurare'];
        $email = $_POST['email'];
        $provencia = $_POST['provencia'];
        $region = $_POST['region'];
        $privacy = $_POST['privacy'];
        $goirni = $_POST['goirni'];


        $sql = "INSERT INTO `register`(`name`,`dob`, `email`, `cellulare`, `provincia`, `regioni`, `giorini`, `privacy`, `cognomi`) VALUES
         ('$name','$bod','$email','$cellurare','$provencia','$region','$goirni','$privacy','$cognome')";
        
        $insertd = mysqli_query($connection,$sql);
        if($insertd){
            echo "<h1 style='background-color:green'>Done</h1>";
        }



    }



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Registration Form</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="">Menu 1</a></li>
                <li><a href="">Menu 2</a></li>
                <li><a href="">Menu 3</a></li>
                <li><a href="">Menu 4</a></li>
                <li><a href="./admin.php">Admin</a></li>
            </ul>
            <button>Button</button>
            
                <i onclick="showMenu()" class="menuBar">&#8801</i>
                <script>
                    function showMenu(){
                        var menu = document.querySelector('ul').classList.toggle('mobileMenu')
                    }
                </script>
            
        </nav>
    </header>
    <div class="bgColorShed"></div>
    <section>
        <div class="sectionHead">
            <h1>MANIFESTAZIONE NAZIONALE</h1>
            <div class="dateAndt">
                <p>Date and Time</p>
            </div>
            <div class=" preAcc">
                <p>PRE-ACCREDITO</p>
            </div>
        </div>
        <br><br>
        <div class="formDiv">
            <form action="index.php" method='post'>
                <div class="formSizing">
                    <div class="InnerDivForm">
                        <div class="formFil">
                            <input type="text" name="name" placeholder="Name">
                            <input type="text" name="cognome" placeholder="Cognome">
                        </div>
                        <div class="formFil">
                            <input type="text" name="bod" placeholder="Data di nascita">
                        </div>
                        <div class="formFil">
                            <input type="email" name="email" placeholder="Email">
                        </div>
                        <div class="formFil">
                            <input type="text" name="cellurare" placeholder="Cellurare">
                        </div>
                        <div class="formFil">
                            <select onchange="getProvince(this.e)" class="prob" name="provencia" id="">
                                <option value="Provencia">Provencia</option>
                                <option value="option1">Option 1</option>
                                <option value="option2">Option 2</option>

                            </select>
                            <script>
                                function getProvince(e){
                                    var d = document.querySelector('.prob').value;
                                    let xhr = new XMLHttpRequest();
                                    xhr.open('GET','./warHoue.php?subcat='+d,true);
                                    xhr.onreadystatechange = function(){
                                        if(xhr.readyState===4 && xhr.status === 200){
                                            let data = xhr.response;
                                            document.querySelector('.provenceR').innerHTML=data;
                                            console.log(data)
                                        }

                                    }
                                    
                                    xhr.send();
                                }
                            </script>
                        </div>
                        <div class="formFil">
                            <select name="region" class="provenceR">
                                <option selected disabled>Region</option>
                                
                                    
                                
                                
                            </select>
                        </div><br>
                        <h4>Selezionare i goirni</h4>
                        <div class="formFilCheck">
                            <input type="checkbox" name="goirni" value="Venerdi 8 marzo (PM)">
                            <label> Venerdi 8 marzo (PM)</label>
                        </div>
                        <div class="formFilCheck">
                            <input type="checkbox" name="goirni" value="Sabato 9 marzo (AM)">
                            <label> Sabato 9 marzo (AM)</label>
                        </div>
                        <div class="formFilCheck">
                            <input type="checkbox" name="goirni" value="Sabato 9 marzo (PM)">
                            <label> Sabato 9 marzo (PM)</label>
                        </div>
                    </div>
                </div>

<br><br>
                <div class="informati">
                    <p class="arttitl">Informativa sulia peivacy</p>
                    <p class="artt">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore porro facilis molestias sunt doloremque ut recusandae vero, quam totam deleniti explicabo nam quo rerum exercitationem dolor sit placeat nemo neque necessitatibus optio repudiandae id at dolore veritatis. Suscipit eius, laborum id minima deleniti sed, eaque illo voluptate dolore provident nesciunt, dignissimos similique. Earum, accusantium dolorem dolor cum molestias reiciendis ab saepe animi commodi accusamus officiis excepturi obcaecati beatae, praesentium distinctio voluptatibus iusto adipisci, numquam voluptatum facilis veniam sint quod. Exercitationem laudantium laboriosam temporibus vitae sint, ab molestiae eos iste rem? Hic maxime nihil ullam consequatur, velit a accusantium laudantium adipisci vero voluptatum dolorum minus aliquid minima, praesentium suscipit ab provident. Illum aliquam excepturi a expedita deleniti quae molestiae voluptatem! Numquam, suscipit excepturi iste quidem in vel incidunt nobis enim delectus pariatur nulla dolor quo laborum hic. Magni nesciunt minus laboriosam amet. Rerum reiciendis pariatur voluptatibus nulla. Aspernatur, saepe distinctio. Sint error dolore quam tempore! Dolores eveniet, animi suscipit nam voluptatibus, molestias recusandae debitis voluptatem est ducimus aut consequatur quas inventore modi culpa. Porro aspernatur, nobis, deserunt, similique sunt necessitatibus quaerat repellat nisi soluta aperiam cumque labore quos nulla vel perspiciatis quasi aut incidunt provident! Quasi est blanditiis quo expedita perferendis!</p>
                </div><br>
                <div class="informati">
                    <p class="arttitl">Consenso</p>
                    <p class="artt">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore porro facilis molestias sunt doloremque ut recusandae vero, quam totam deleniti explicabo nam quo rerum exercitationem dolor sit placeat nemo neque necessitatibus optio repudiandae id at dolore veritatis. Suscipit eius, laborum id minima deleniti sed, eaque illo voluptate dolore provident nesciunt, dignissimos similique. Earum, accusantium dolorem dolor cum molestias reiciendis ab saepe animi commodi accusamus officiis excepturi obcaecati beatae, praesentium distinctio voluptatibus iusto adipisci, numquam voluptatum facilis veniam sint quod. Exercitationem laudantium laboriosam temporibus vitae sint, ab molestiae eos iste rem? Hic maxime nihil ullam consequatur, velit a accusantium laudantium adipisci vero voluptatum dolorum minus aliquid minima, praesentium suscipit ab provident. Illum aliquam excepturi a expedita deleniti quae molestiae voluptatem! Numquam, suscipit excepturi iste quidem in vel incidunt nobis enim delectus pariatur nulla dolor quo laborum hic. Magni nesciunt minus laboriosam amet. Rerum reiciendis pariatur voluptatibus nulla. Aspernatur, saepe distinctio. Sint error dolore quam tempore! Dolores eveniet, animi suscipit nam voluptatibus, molestias recusandae debitis voluptatem est ducimus aut consequatur quas inventore modi culpa. Porro aspernatur, nobis, deserunt, similique sunt necessitatibus quaerat repellat nisi soluta aperiam cumque labore quos nulla vel perspiciatis quasi aut incidunt provident! Quasi est blanditiis quo expedita perferendis!</p>
                </div>
                <br><br>
                <div class="lastP">
                    <div class="formFilCheck">
                        <input type="checkbox" checked name='privacy' value="yes">
                        <label> Sabato 9 marzo (PM)</label>
                    </div>
                </div>
                <div class="lastP">
                    <button name="submit" class="subButton">PARTECIPO</button>
                </div>
                <br><br><br><br>
            </form>
            
        </div>
    </section>
    <footer>
        <nav>
            <ul>
                <li><a href="">Designed & Developed by Shahriar</a></li>
                
            </ul>
            <ul>
                <li><a href="">LOGO</a></li>
                
            </ul>
            
        </nav>
    </footer>
    
</body>
</html>