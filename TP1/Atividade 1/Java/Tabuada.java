import java.util.Scanner;

public class Tabuada {
    public static void main(String[] args) {
        try (Scanner scanner = new Scanner(System.in)) {
            System.out.print("Digite um numero para exibir a tabuada: ");
            int numero = scanner.nextInt();
            
            for (int i = 1; i <= 10; i++) {
                System.out.printf("%d x %d = %d%n", numero, i, numero * i);
            }
        }
    }
}
