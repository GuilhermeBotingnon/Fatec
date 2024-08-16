import java.util.Scanner;

public class CalcularArea {
    public static void main(String[] args) {
        try (Scanner scanner = new Scanner(System.in)) {
            System.out.println("Menu:");
            System.out.println("1. Calcular area do quadrado");
            System.out.println("2. Calcular area do circulo");
            System.out.print("Escolha uma opcao (1 ou 2): ");
            int opcao = scanner.nextInt();
            
            switch (opcao) {
                case 1:
                    System.out.print("Digite o comprimento do lado do quadrado: ");
                    double lado = scanner.nextDouble();
                    double areaQuadrado = lado * lado;
                    System.out.printf("A area do quadrado e: %.2f%n", areaQuadrado);
                    break;
                case 2:
                    System.out.print("Digite o raio do circulo: ");
                    double raio = scanner.nextDouble();
                    double areaCirculo = Math.PI * raio * raio;
                    System.out.printf("A area do circulo e: %.2f%n", areaCirculo);
                    break;
                default:
                    System.out.println("Opcao invalida");
                    break;
            }
        }
    }
}
