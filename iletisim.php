
<?php 
try {
  $conn = new PDO("mysql:host=127.0.0.1;dbname=haber;charset=utf8", 'root', '123hey123');
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
  die();}
  ?>
<?php include 'header.php'; ?>



<section id="ContactContent">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="contact_area">
            <h1>İLETİŞİM</h1>
            <p>İletişim bilgilerimizden bize ulaşabilir, öneri ve şikayetlerinizi paylaşabilirsiniz.</p>
            <div class="contact_bottom">
              <div class="contact_us wow fadeInRightBig">
                <h2>Bize Ulaşın</h2>
                
                
                
                <form ,class="contact_form" method="post">
                  <input class="form-control" type='text' name="isim" placeholder="İsim(gerekli)" >
                  <input class="form-control" type='email'name="email" placeholder="E-mail(gerekli)" >
                  <input class="form-control" type="text"name="Konu" placeholder="konu"  >
                  <textarea class="form-control" cols="30" name="Mesaj"rows="10" placeholder="Mesaj(gerekli)"></textarea>
                  <input type="submit" name = "gonder" value="gonder">
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    </div>
  </section>
  

  <?php 
  if (isset($_POST['isim']) && isset($_POST['Mesaj'])  && isset($_POST['email'])){
    $isim = $_POST["isim"];
  $email= $_POST['email'];
  $Konu = $_POST['Konu'];
  $Mesaj = $_POST['Mesaj'];
  if ($isim !=null && $email != null && $Mesaj != null){
  $conn->prepare ('INSERT INTO `i̇letisim` SET 
  
   isim = ?,
   email = ?,
   Konu = ?,
   Mesaj = ?')->execute([$isim,$email,$Konu,$Mesaj]);
  
  echo "Mesajınız Bize Başarıyla Ulaştı";
}
else{
  echo "Boş alan bırakmayınız";
}
  }
  else {
    
  }
  
  
  include 'footer.php'; ?>