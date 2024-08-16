import java.util.ArrayList;
import java.util.List;
import java.util.Scanner;

public class ListaNomes {
    public static void main(String[] args) {
        try (Scanner scanner = new Scanner(System.in)) {
            List<String> nomes = new ArrayList<>();
            
            for (int i = 0; i < 5; i++) {
                System.out.print("Digite o nome " + (i + 1) + ": ");
                nomes.add(scanner.nextLine());
            }
            
            System.out.print("Digite um nome para verificar na lista: ");
            String nomeParaVerificar = scanner.nextLine();
            
            if (nomes.contains(nomeParaVerificar)) {
                System.out.println("O nome esta presente na lista");
            } else {
                System.out.println("O nome nao esta presente na lista");
            }
        }
    }
}
