/* define image width and height */



var pic_widthh=250;

var pic_heightt=120;



/* define the length of time to stay on each image */ 

/* 1000 = 1 second */



var delayy=2000;



/* define image urls */

/* TO ADD NEW PIC add code in "if (document.images)" and change the size of array           "var pics= new Array(5) " and add array value "   pics[X]=picX+1.src;" */

if (document.images)

 {

     pics1= new Image(pic_widthh,pic_heightt);

     pics1.src="images/course_offer_8.gif";

	 pics2= new Image(pic_widthh,pic_heightt);

     pics2.src="images/course_offer_8.gif"; 

     pics3= new Image(pic_widthh,pic_heightt); 

     pics3.src="images/course_offer_9.gif";

     pics4= new Image(pic_widthh,pic_heightt); 

     pics4.src="images/course_offer_9.gif";

	 pics5= new Image(pic_widthh,pic_heightt); 

     pics5.src="images/course_offer_10.gif";  

	 pics6= new Image(pic_widthh,pic_heightt); 

     pics6.src="images/course_offer_10.gif";  

     pics7= new Image(pic_widthh,pic_heightt); 

     pics7.src="images/course_offer_11.gif"; 

     pics8= new Image(pic_widthh,pic_heightt); 

     pics8.src="images/course_offer_11.gif"; 

     pics9= new Image(pic_widthh,pic_heightt); 

     pics9.src="images/cp.gif"; 

     pics10= new Image(pic_widthh,pic_heightt); 

     pics10.src="images/cp.gif";

     pics11= new Image(pic_widthh,pic_heightt); 

     pics11.src="images/batches_start.gif"; 

     pics12= new Image(pic_widthh,pic_heightt); 

     pics12.src="images/batches_start.gif";
	 
	 pics13= new Image(pic_widthh,pic_heightt); 

     pics13.src="images/at.gif"; 

     pics14= new Image(pic_widthh,pic_heightt); 

     pics14.src="images/at.gif";

 }    



var picss= new Array(14) ;

   picss[0]=pics11.src;

   picss[1]=pics12.src;

   picss[2]=pics9.src;

   picss[3]=pics10.src;

   picss[4]=pics13.src;

   picss[5]=pics14.src;

   picss[6]=pics1.src;

   picss[7]=pics2.src;

   picss[8]=pics3.src;

   picss[9]=pics4.src;

   picss[10]=pics5.src;

   picss[11]=pics6.src;
   
   picss[12]=pics7.src;
   
   picss[13]=pics8.src;



   var numpicss=picss.length;



var thenumm=0;

imgNamee="imgg1";

function change_it4()

 {

         var x=0;

          thenumm+=1;

           if (thenumm>numpicss-1)

             thenumm=0;



           document[imgNamee].src=picss[thenumm];

           x+=1;

           setTimeout('change_it4()',delayy);

 }



function change_test()

 {

   if (document.images)

    { 

      document.write("<img src='"+picss[thenumm]+"' border='0' width='"+pic_widthh+"' height='"+pic_heightt+"' name='imgg1'>\n");

      setTimeout('change_it4()',delayy);  

   }

}