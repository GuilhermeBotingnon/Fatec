import java.util.Scanner;

public class SenhaSecreta {
    public static void main(String[] args) {
        final String SENHA_CORRETA = "Java123";
        
        try (Scanner scanner = new Scanner(System.in)) {
            String senhaInformada;
            
            do {
                System.out.print("Digite a senha: ");
                senhaInformada = scanner.nextLine();
                
                if (!senhaInformada.equals(SENHA_CORRETA)) {
                    System.out.println("Senha invalida. Tente novamente.");
                }
            } while (!senhaInformada.equals(SENHA_CORRETA));
            
            System.out.println("Senha correta! Acesso concedido.");
        }
    }
}
