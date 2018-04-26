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
var x = 10;
var y =350;
var ballWidth = 300;
var ballHeight = 200;
           draw = function(){

            background(255, 206, 71);

              fill(191, 0, 255);
              ellipse(x, y, ballWidth, ballHeight);

              x = x + 1;
              y = y - 2;
              ballWidth = ballWidth * 99/100;
              ballHeight = ballHeight * 99/100;

           };
}


}
