@extends('Score.layout')

@section('home')

<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="{{URL ('image/1.png')}}" class="d-block w-100" name="slide">
        </div>
    </div>
</div>

<script>
        var i = 0;
        var images = [];
        var time = 2000;

        //image list
        images[0] = "{{URL ('image/1.png')}}";
        images[1] = "{{URL ('image/2.png')}}";
        images[2] = "{{URL ('image/3.png')}}";
        images[3] = "{{URL ('image/4.png')}}";
        images[4] = "{{URL ('image/5.png')}}";
        images[5] = "{{URL ('image/6.png')}}";
        images[6] = "{{URL ('image/7.png')}}";
        images[7] = "{{URL ('image/8.png')}}";
        images[8] = "{{URL ('image/9.png')}}";
        images[9] = "{{URL ('image/10.png')}}";
        images[10] = "{{URL ('image/11.png')}}";
        images[11] = "{{URL ('image/12.png')}}";


        function changeImg() {
            document.slide.src = images[i];

            if (i < images.length - 1) {
                i++;
            } else {
                i = 0;
            }
            setTimeout("changeImg()",time);
        }
        window.onload = changeImg;
</script>

@endsection
@section('contend')
<div class="container">


<!-- Page content -->
<div class="containert">

  <!-- About Section -->
  <div class="row pt-3" id="about">
    

    
  </div>
  
  <hr>

  <table>
    <tr>
      <td class="col-6">
          <div class="">
            <img src="{{URL ('image/13.png')}}" class="img m-5" alt="" width="300">
          </div>
      </td>
      <td class="col-6">
      <div class="text-justify">
      <h1 class="w3-center">History of Cricket</h1><br>
      <h5 class="w3-center">Tradition since 1889</h5>
      <p class="w3-large">The Catering was founded in blabla by Mr. Smith in lorem ipsum dolor sit amet, consectetur adipiscing elit consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute iruredolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.We only use <span class="w3-tag w3-light-grey">seasonal</span> ingredients.</p>
      <p class="w3-large w3-text-grey w3-hide-medium">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod temporincididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
      </td>
    </tr>
    <tr>
      <td>
          <div class="col-10 text-justify">
            <h1 class="w3-center">Cricket Lovers</h1><br>
            <h4>Bread Basket</h4>
            <p class="w3-text-grey">Assortment of fresh baked fruit breads and muffins 5.50</p><br>
          
            <h4>Honey Almond Granola with Fruits</h4>
            <p class="w3-text-grey">Natural cereal of honey toasted oats, raisins, almonds and dates 7.00</p><br>
          
            <h4>Belgian Waffle</h4>
            <p class="w3-text-grey">Vanilla flavored batter with malted flour 7.50</p><br>
          
            <h4>Scrambled eggs</h4>
            <p class="w3-text-grey">Scrambled eggs, roasted red pepper and garlic, with green onions 7.50</p><br>
          
            <h4>Blueberry Pancakes</h4>
            <p class="w3-text-grey">With syrup, butter and lots of berries 8.50</p>    
        </div>
      </td>
      <td>
          <div class="col-2">
          <img src="{{URL ('image/14.png')}}" class="img ml-5" alt="sangakkara" width="300">
          </div>
      </td>
    </tr>

  </table>
  
  <!-- Menu Section -->
  <div class="w3-row w3-padding-64" id="menu">
    
    
    
  </div>

  <hr>

  
</div>


</body>
</html>




</div>

@endsection