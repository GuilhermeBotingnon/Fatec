import java.util.Scanner;

public class SomaImpares {
    public static void main(String[] args) {
        try (Scanner scanner = new Scanner(System.in)) {
            System.out.print("Digite um numero inteiro n: ");
            int n = scanner.nextInt();
            
            int soma = 0;
            int numero = 1;
            
            for (int i = 0; i < n; i++) {
                soma += numero;
                numero += 2;
            }
            
            System.out.printf("A soma dos primeiros %d numeros impares e: %d%n", n, soma);
        }
    }
}
