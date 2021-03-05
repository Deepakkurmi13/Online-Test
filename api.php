<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
      <body class="bg-light">
      <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
      <title>Google Books Embedded Viewer API Example</title>

      <div class="container">
        <h1 class="display-4 align-middle mt-5 text-dark">Google Api App</h1>
      </div>

      <div class="container mt-5 p-3 border-0">
          <div class="card text-white bg-dark mb-3 float-left shadow-lg" style="max-width: 20rem;">
              <div class="card-header">Google Books Api App</div>
              <div class="card-body">
                <h4 class="card-title">Type your ISBN below</h4>
                <input type="text" class="form-control isbn" placeholder="Enter your isbn">
                <button class="btn btn-primary mt-2 mb-2">Start Reading</button>
                <button class="btn btn-light auto">Auto-turn</button>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem vero inventore non fuga rerum ducimus..</p>
              </div>
            </div>
      </div>

      <div id="viewerCanvas" style="width: 800px; height: 800px" class="mr-3 float-right"></div>

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

      <script type="text/javascript" src="https://www.google.com/books/jsapi.js"></script>

      <script>
        const button = document.querySelector(".btn-primary");
        const isbn = document.querySelector(".isbn");
        const auto = document.querySelector(".auto");

        button.addEventListener("click",initialiase);

        google.books.load({"language":"en"});

        function nextStep(viewer){
          window.setTimeout(function(){
            viewer.nextPage()
            nextStep(viewer);
          },3000)
        }

        function alertNotFound(){
          alert("Book not found!");
        }

        function initialiase(){
          var viewer = new google.books.DefaultViewer(document.getElementById("viewerCanvas"));
          viewer.load("ISBN:"+isbn.value,alertNotFound);
          auto.addEventListener("click",nextStep(viewer));
        }

        google.books.setOnLoadCallback(initialiase);

      </script> 