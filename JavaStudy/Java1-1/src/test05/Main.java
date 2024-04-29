package test05;

public class Main {

    public static void main(String[] args) {
        long dataLong1 = 9223372036854775807L;
        
        long dataLong2 = -9223372036854775808L;
        
        System.out.println("longに格納できる最大値は："+dataLong1+"：最小値は："+dataLong2+"：");
        
        int dataInt1 = 2147483647;
        
        int dataInt2 = -2147483648;
        
        System.out.println("intに格納できる最大値は："+dataInt1+"：最小値は"+dataInt2+"：");
        
        short dataShort1 = 32767;
        
        short dataShort2 = -32768;
        
        System.out.println("shortに格納できる最大値は："+dataShort1+"：最小値は"+dataShort2+"：");
        
        byte dataByte1 = 127;
        
        byte dataByte2 = -128;
        
        System.out.println("byteに格納できる最大値は："+dataByte1+"：最小値は"+dataByte2+"：");
        
        char character = 'B';
        
        String mozimozi = "hello world";
        
        System.out.println(character + ":" + mozimozi);
        
        // TODO 自動生成されたメソッド・スタブ

    }

}
