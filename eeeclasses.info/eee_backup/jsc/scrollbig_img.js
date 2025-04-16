/* define image width and height */

var pic_widthh=300;
var pic_heightt=300;

/* define the length of time to stay on each image */ 
/* 1000 = 1 second */

var delayy=2000;

/* define image urls */
/* TO ADD NEW PIC add code in "if (document.images)" and change the size of array           "var pics= new Array(5) " and add array value "   pics[X]=picX+1.src;" */
if (document.images)
 {
     pics1= new Image(pic_widthh,pic_heightt);
     pics1.src="photos/01f.jpg";  
     pics2= new Image(pic_widthh,pic_heightt); 
     pics2.src="photos/02f.jpg";  
     pics3= new Image(pic_widthh,pic_heightt);
     pics3.src="photos/03f.jpg";  
     pics4= new Image(pic_widthh,pic_heightt);
     pics4.src="photos/04f.jpg";  
     pics5= new Image(pic_widthh,pic_heightt);
     pics5.src="photos/05f.jpg";   
     pics6= new Image(pic_widthh,pic_heightt);
     pics6.src="photos/06f.jpg"; 
     pics7= new Image(pic_widthh,pic_heightt);
     pics7.src="photos/08f.jpg"; 
     pics8= new Image(pic_widthh,pic_heightt);
     pics8.src="photos/09f.jpg";   
     pics9= new Image(pic_widthh,pic_heightt);
     pics9.src="photos/10f.jpg"; 
     pics10= new Image(pic_widthh,pic_heightt);
     pics10.src="photos/11f.jpg"; 
     pics11= new Image(pic_widthh,pic_heightt);
     pics11.src="photos/12f.jpg"; 
	 pics12= new Image(pic_widthh,pic_heightt);
     pics12.src="photos/image1xl.gif";  
     pics13= new Image(pic_widthh,pic_heightt); 
     pics13.src="photos/image2xl.gif";  
     pics14= new Image(pic_widthh,pic_heightt);
     pics14.src="photos/image3xl.gif";  
     pics15= new Image(pic_widthh,pic_heightt);
     pics15.src="photos/image4xl.gif";  
     pics16= new Image(pic_widthh,pic_heightt);
     pics16.src="photos/image5xl.gif";   
     pics17= new Image(pic_widthh,pic_heightt);
     pics17.src="photos/image6xl.gif"; 
     pics18= new Image(pic_widthh,pic_heightt);
     pics18.src="photos/image7xl.gif"; 
     pics19= new Image(pic_widthh,pic_heightt);
     pics19.src="photos/image8xl.gif";   
     pics20= new Image(pic_widthh,pic_heightt);
     pics20.src="photos/image9xl.gif"; 
     pics21= new Image(pic_widthh,pic_heightt);
     pics21.src="photos/image10xl.gif"; 
     pics22= new Image(pic_widthh,pic_heightt);
     pics22.src="photos/image11xl.gif";
     pics23= new Image(pic_widthh,pic_heightt);
     pics23.src="photos/image12xl.gif";   
     pics24= new Image(pic_widthh,pic_heightt);
     pics24.src="photos/image13xl.gif"; 
     pics25= new Image(pic_widthh,pic_heightt);
     pics25.src="photos/image14xl.gif"; 
     pics26= new Image(pic_widthh,pic_heightt);
     pics26.src="photos/image15xl.gif";
 }    

var picss= new Array(26) 
   picss[0]=pics1.src;
   picss[1]=pics2.src;
   picss[2]=pics3.src;
   picss[3]=pics4.src;
   picss[4]=pics5.src;
   picss[5]=pics6.src;
   picss[6]=pics7.src; 
   picss[7]=pics8.src;
   picss[8]=pics9.src;
   picss[9]=pics10.src;
   picss[10]=pics11.src;
   picss[11]=pics12.src;
   picss[12]=pics13.src;
   picss[13]=pics14.src;
   picss[14]=pics15.src;
   picss[15]=pics16.src;
   picss[16]=pics17.src;
   picss[17]=pics18.src;
   picss[18]=pics19.src;
   picss[19]=pics20.src;
   picss[20]=pics21.src;
   picss[21]=pics22.src;
   picss[22]=pics23.src;
   picss[23]=pics24.src;
   picss[24]=pics25.src;
   picss[25]=pics26.src;
 var numpicss=picss.length;
var thenumm=0;
imgNamee="imgg1";

function change_big_img()
 {
   if (document.images)
    {
      document.write("<img src='"+picss[thenumm]+"' border='0' width='"+pic_widthh+"' height='"+pic_heightt+"' name='imgg1'>\n");
      setTimeout('change_it4()',delayy);  
   }
}

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
