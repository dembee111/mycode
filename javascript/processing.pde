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
           draw = function(){

            background(150, 250, 250);
              //draw the car
              fill(250, 0, 115);
              rect(x, 200, 100, 20);
              rect(x+15, 178, 70, 40);


              //draw the wheels
              fill(77, 66, 66);
              ellipse(x + 25, 221, 24, 24);
              ellipse(x + 75, 221, 24, 24);
              x = x+5;
           };
}


}
