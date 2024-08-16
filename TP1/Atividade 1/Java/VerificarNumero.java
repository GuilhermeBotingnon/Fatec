import java.util.Scanner;

public class VerificarNumero {
    public static void main(String[] args) {
        try (Scanner scanner = new Scanner(System.in)) {
            System.out.print("Digite um numero: ");
            double numero = scanner.nextDouble();
            
            if (numero > 0) {
                System.out.println("Numero positivo");
            } else if (numero < 0) {
                System.out.println("Numero negativo");
            } else {
                System.out.println("O numero e zero");
            }
        }
    }
}
