<?php require __DIR__ . '/../_init.php'; nbn_session(); ?><!doctype html>
<html>
   <head>
      <meta charset="utf-8">
      <title>Добавяне на новини</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
      <!-- Optional theme -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="style.css">
      <script src="js/tinymce/tinymce.min.js"></script>
      <script>
         tinymce.init({
         selector: '#full_text',
         height: 300,
         theme: 'modern',
         plugins: [
           'advlist autolink lists link image charmap print preview anchor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table paste code help wordcount'
         ],
         toolbar1: 'undo redo  | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent| forecolor backcolor emoticons | help',
         extended_valid_elements: 'script[src|async|defer|type|charset]', // Allow script tags with specified attributes
         entity_encoding: 'raw',
         encoding: 'raw', // Encode PHP tags properly
         valid_children: 'script[src|async|defer|type|charset],*[class]', // Allow script tags as direct children of body
         valid_elements: '*[*]', // Allow all elements and attributes
         extended_valid_elements: 'class[*]',
         entities: '160,nbsp,60,lt,62,gt',
         protect: [
         /<\?php.*?\?>/g  // Protect php cod
         ],
         
         });
      </script>
      <script src="https://use.fontawesome.com/9f9fcd2b9e.js"></script>
   </head>
   <body>
      <div class="container">
         <div class="row">
            <div class="col-xs-10 col-xs-offset-1 main-div">
               <form action="sabitia-upload.php" method="post" name="form-news"><?php echo nbn_csrf_field(); ?>

                  <h2 class="text-center">Добавяне на събития</h2>
                  <div class="form-group">
                     <label for="title">Заглавие:</label>
                     <input id="title" name="title" type="text" class="form-control" >
                  </div>
                  <div class="form-group">
                     <label for="seo_text">Адрес на събитието / SEO текст:</label>
                     <input id="seo_text" name="seo_text" type="text" class="form-control" >
                  </div>
                  <div class="row">
                     <div class="col-sm-12">
                        <p><small style="padding: 3px; border-radius: 3px;" class="bg-danger">* Само знаци, цифри на латиница и тире. Без интервали.</small></p>
                     </div>
                  </div>
                  <div class="form-group">
                     <label for="subtitle">Кратко описание:</label>
                     <textarea name="subtitle" id="subtitle" class="form-control" rows="3" ></textarea>
                  </div>
                  <div class="form-group">
                     <label for="full_text">Пълен текст:</label>
                     <textarea name="full_text" id="full_text" class="form-control" rows="6" ></textarea>
                  </div>
                 <h3>Бутони за Плащане</h3>
                 <div class="form-group">
    <label for="amount">Сума:</label>
    <input id="amount" name="amount[]" type="text" class="form-control">
</div>
<div class="form-group">
    <label for="name">Име и сума:</label>
    <input id="name" name="name[]" type="text" class="form-control">
</div>
<div class="form-group">
    <label for="description">Описание:</label>
    <textarea name="description[]" id="description" class="form-control" rows="3"></textarea>
</div>
<div id="additional-fields"></div>
<button type="button" onclick="addFields();" class="btn btn-primary">Добави Нов Бутон</button>


<script>
    function addFields() {
        var container = document.getElementById("additional-fields");
        var div = document.createElement("div");
        div.innerHTML = `
            <div class="form-group">
                <label for="amount">Сума в лева:</label>
                <input id="amount" name="amount[]" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="name">Име:</label>
                <input id="name" name="name[]" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="description">Описание:</label>
                <textarea name="description[]" class="form-control" rows="3"></textarea>
            </div>
        `;
        container.appendChild(div);
    }
    
    
</script>
                 
                  <div class="btn-group">
                     <button type="submit" name="submit" class="btn btn-success btn-lg"><i class="fa fa-plus" aria-hidden="true"></i> Публикуване
                     </button>
                     <a href="index.php" class="btn btn-danger btn-lg"><i class="fa fa-ban" aria-hidden="true"></i> Отказ</a>
                  </div>
            </div>
            </form>
         </div>
      </div>
      </div>
     
   </body>
</html>