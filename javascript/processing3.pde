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



strokeWeight(3);
stroke(57, 0, 214);
fill(0, 210, 247);


           draw = function(){

            background(255, 255, 255);
            ellipse(mouseY, mouseX, 30, 30);
           };
}


}
