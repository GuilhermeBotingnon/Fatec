import java.util.Scanner;

public class CompararNumeros {
    public static void main(String[] args) {
        try (Scanner scanner = new Scanner(System.in)) {
            System.out.print("Digite o primeiro numero inteiro: ");
            int numero1 = scanner.nextInt();
            
            System.out.print("Digite o segundo numero inteiro: ");
            int numero2 = scanner.nextInt();
            
            if (numero1 == numero2) {
                System.out.println("Os numeros sao iguais");
            } else if (numero1 > numero2) {
                System.out.println("O primeiro numero e maior");
            } else {
                System.out.println("O segundo numero e maior");
            }
        }
    }
}
