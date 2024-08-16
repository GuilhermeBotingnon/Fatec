import java.util.Scanner;

public class ClassificacaoIdade {
    public static void main(String[] args) {
        try (Scanner scanner = new Scanner(System.in)) {
            System.out.print("Digite sua idade: ");
            int idade = scanner.nextInt();
            
            if (idade < 18) {
                System.out.println("Menor de idade");
            } else if (idade < 60) {
                System.out.println("Adulto");
            } else {
                System.out.println("Idoso");
            }
        }
    }
}
