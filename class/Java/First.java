 class second {
    public void print()
    {
        System.out.println("hi");
    }
    
}



public class First extends second
{
    public static void main(String[] args) {

        second c = new second();
        c.print();

    }
    }
