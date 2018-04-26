Ball b;

void setup()
{
       size(400, 400);
       background(100);
}
void draw()
{
if (b == null){
b = new Ball(50, 50);
}
b.draw();
}

class Ball{
int x, y;
int yV;
int gravity;

Ball(int initX, int initY){
x=initX;
y=initY;

yV = 1;
gravity = 1;
}
void draw(){



noStroke();
var eyeSize = 40;
var x = 200;
background(255, 255, 200);
           draw = function(){

                  fill(255, 255, 0);
                  ellipse(x, 208, 300, 300);

                  //eye
                  fill(46, 46, 41);
                  ellipse(x - 50, 151, eyeSize, eyeSize);
                  ellipse(x + 50, 142, eyeSize, eyeSize);

                  //mouth
                  fill(252, 65, 65);
                  ellipse(x+50, 240, 120, 136);

                  eyeSize++;

           };
}


}
