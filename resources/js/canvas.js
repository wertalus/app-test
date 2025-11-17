/* var canvas = document.querySelector('canvas');

canvas.width = window.innerWidth;
canvas.height = window.innerHeight-110;

var c = canvas.getContext('2d');
var box_x= 200;
var box_y = 50;

    function drawNewWagons() {
        var xrect =innerWidth- 300;
        var yrect = innerHeight -200;

        c.strokeStyle ='black';
            
        c.fillStyle='rgba(0,255,0,0.5';
        c.fillRect(0, canvas.height/2-40,canvas.width,50);
        
        for (let i = 0; i < 6; i++) {
            
            c.rect(xrect, yrect, box_x, box_y);
            
            if(i==2)
                yrect = yrect - 220;
            else
            {
                yrect = yrect - 135;
            }

        }
        //c.stroke();
    }



    function drawTextNewWagons()
    {
        var xtext = innerWidth -210;
        var ytext = innerHeight-700;
        
        c.fillStyle = 'black'
        c.font ='24px arial';
        c.textAlign = "center";
        c.textBaseline = 'middle';
        
         for (let i = 5; i <= 8; i++) {
            var number_sr = i+1;

            c.fillText('SR'+number_sr,xtext,ytext);
            ytext = ytext -135;
            
        }

        var ytext = innerHeight-345;
        for (let i = 3; i >= 2; i--) {
            c.fillText('SH'+i,xtext,ytext);
            ytext = ytext -135;
        }

        //c.stroke();
    }

        function drawRevisionWagons() {
        var xrect =innerWidth- 700;
        var yrect = innerHeight -200;

        c.strokeStyle ='black';
        
        for (let i = 0; i < 6; i++) {
            
            c.rect(xrect, yrect, box_x, box_y);
            
            if(i==2)
                yrect = yrect - 220;
            else
            {
                yrect = yrect - 135;
            }

        }
        //c.stroke();
    }

        function drawRevisionWagons2() {
        var xrect =innerWidth- 1000;
        var yrect = innerHeight -200;

        c.strokeStyle ='black';
                    
        for (let i = 0; i < 6; i++) {
            
            c.rect(xrect, yrect, box_x, box_y);
            
            if(i==2)
                yrect = yrect - 220;
            else
            {
                yrect = yrect - 135;
            }

        }
        
    }
    
    drawNewWagons();
    drawTextNewWagons();
    drawRevisionWagons();
    drawRevisionWagons2();
    c.stroke();


console.log(canvas); */