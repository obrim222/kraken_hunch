@extends('mytemplate')

@section('title', 'Blogs Detil')
<!-- added jQuery link-->
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>


@section('content')

<section class="hero">
    <div class="container">

    <div class="hero__text container--pall">
  
        <h1 class="animate__animated animate__backInLeft">Welcome to CryptoHunch Forum!</h1>

         <p>
            CryptoHunch is a LEARN & EARN web app. When you are finished reading these articles you can earn Hunch by posting in the comment box below the articles so you learn and earn at the same time. 
        </p>

        <a href="./register" class="button hero__cta">Register</a>
    </div>

</div>
</section>
@if(!empty($blogsdetail))
@foreach($blogsdetail as $blog) 

 <div class="container ">
     <div class="blogImage m-4" style="background-image: url('./images/<?php echo $blog->name  .  ".png" ?>')"></div>
     
    
        <div class="ml-5" > 
            <?php echo  $blog->name  .  " by " .  $blog->first_name . " "  ?>
            <br>
            {{$blog->date }}
         </div>

     <div class="ml-4" > 
        <div class="article__text">
            <div class="m-3" style=" text-align:justify"   > 
            {{$blog->blog}}
        </div>

            <form action="" method="post">
             
                <input type="hidden" name="_token" id="csrf" value="{{Session::token()}}">
                @csrf

                <div id="test" > 
                    <?php echo  $blog->id  ?>
                </div>

                <textarea id="comment" class="m-3 " name="blogComment" cols="140" rows="4"></textarea>

                @error('blogComment')

                <div class="m-3 ">
                    {{ $blog->message }}
                </div>
                @enderror
                <div class="m-3" >
                    <button  id="storememberbtn" type="submit">Comment</button>
                </div>
            </form>

            <div class="m-3">Past Comments:</div>
            <div class="m-3 bgc">
                {{$blog->comment}}
            </div>        
        </div>
        </div>
    </div>
    @endforeach
@endif  

<script>
    $(document).ready(function() {
       
        $('#storememberbtn').on('click', function() {
          var name = $('#comment').val();
          var id = $('#test').val();
    
          if(comment!=""){
            //   $("#storememberbtn").attr("disabled", "disabled");
              $.ajax({
                  url: "/blogsdetail",
                  type: "POST",
                  data: {
                      _token: $("#csrf").val(),
                      type: 1,
                      comment: comment,
    
                      data: $("#test").val(),
          
                  },
                  cache: false,
                  success: function(responseOutput){
                      console.log(responseOutput);
                      var responseOutput = JSON.parse(responseOutput);
                      if(responseOutput.statusCode==200){
                        window.location = "/blogsdetail";				
                      }
                      else if(responseOutput.statusCode==201){
                         alert("Error occured !");
                      }
                      
                  }
              });
          }
          else{
              alert('Please fill all the field !');
          }
      });
    });
</script>

    
   

@endsection
