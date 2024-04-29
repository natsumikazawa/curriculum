package test02;

public class Main {
    
    public static void main(String[] args) {
        int age;
        
        age = 20;
        
        System.out.println("私の歳は" + age + "です。");
        
        String dataString = "1000";
        
        int dataInt = 0;
        
        dataInt = Integer.parseInt(dataString);
        dataString = String.valueOf(dataInt);
        
        System.out.println(dataInt + "+" + dataString);
        
        int a = 100;
//        System.out.println(a++);
        System.out.println(--a);
        
        String b = "100";
        System.out.println(b + b);
        
    }
}
