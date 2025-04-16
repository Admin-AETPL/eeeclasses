/* Java script to scroll images. Copyrights @ ATI */

/* define image width and height */
var pic_width=90;
var pic_height=100;

/* define the length of time to stay on each image */ 
/* 1000 = 1 second */
var delay=3500;

/* define image urls */
/* TO ADD NEW PIC add code in "if (document.images)" and change the size of array           "var pics= new Array(5) " and add array value "   pics[X]=picX+1.src;" */
if (document.images)
 {
     pic1= new Image(pic_width,pic_height);
     pic1.src="images/004.jpg";  
     pic2= new Image(pic_width,pic_height); 
     pic2.src="images/005.jpg";  
     pic3= new Image(pic_width,pic_height);
     pic3.src="images/006.jpg";  
     pic4= new Image(pic_width,pic_height);
     pic4.src="images/007.jpg";     
 }    

var pics= new Array(4) 
   pics[0]=pic1.src;
   pics[1]=pic2.src;
   pics[2]=pic3.src;
   pics[3]=pic4.src;
 
var numpics=pics.length;
var thenum=0;
imgName="img1";

function change_it()
 {
   if (document.images)
    {
      document.write("<img src='"+pics[thenum]+"' border='0' width='"+pic_width+"' height='"+pic_height+"' name='img1'>\n");
      setTimeout('change_it2()',delay);  
   }
}

function change_it2()
 {
         var x=0;
          thenum+=1;
           if (thenum>numpics-1)
             thenum=0;

           document[imgName].src=pics[thenum];
           x+=1;
           setTimeout('change_it2()',delay);
 }