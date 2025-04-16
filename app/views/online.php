<style>
    body{
    background-color: #f0f8ff;
}


.card-1{
    display:flex;
    flex-direction: row;
    text-align:center;
  }
   @media (max-width: 1000px){
       .card-1{
         flex-direction:column;
       }
   }
 
  .image-para{
       margin-top: 40px;
       font-size:21px;
       color:black; 
   }
   .para{
       font-weight:bold;
       font-size:20;
   }
   @media (max-width: 500px){
       .image-para {
        flex-wrap: wrap;
        width: 394px;
       }
   }
  .image-para h2{
    color: cornflowerblue;
    font-weight: bold;
  }
   .button{
    margin-top: 40px;
    
 }
 button{
    height: 35px;
    background-color: aqua;
 }
 button:hover{
    background-color: cadetblue;
 }
 .image-para  a{
     text-decoration: none;
     color: black;
     font-weight: bold;
     

 }
 
</style>
<div class="card-1">
            <div class="image">
                <img src="img/background/education-5600987__340.webp"  height="400px" width="400px">
                
            </div>
            <div class="image-para">
                <h2>e-Edge Education Online</h2>
                   
                           <div class="para">  "Online learning is an educational medium that allows students to participate in courses via the internet. They don’t need to visit lecture halls or classrooms, and they can choose to learn whatever they want from the comfort of their own homes. 

                           <br> Online learning is also a way for subject-matter experts to pass on their knowledge in a gratifying way."</div>
                            <div class="button">
                                <button><a href="https://meet.google.com/ngx-derb-qnq">Watch Online Class</a> </button> </div>
            </div>
        </div>
<script>
    $(document).ready(function() {
        $("#rdbtn").click(function() {
            if ($("#read-text").css("display") == "none") {
                $("#readmore").css("display", "none");
                $("#read-text").css("display", "block");
                $("#rdbtn").text("Read Less");
            } else if ($("#read-text").css("display") == "block") {
                $("#readmore").css("display", "block");
                $("#read-text").css("display", "none");
                $("#rdbtn").text("Read More");
            }
        })
    })
</script>