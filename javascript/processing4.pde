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
background(255, 255, 255);
fill(0, 13, 255);
textSize(30);
text("дарна уу!!!", mouseX, mouseY);
}


}
