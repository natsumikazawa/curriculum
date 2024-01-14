package check;

import constants.Constants;

public class Main {
	public static void main(String[] args) {
		System.out.println("printNameメソッド →" + printName(firstName, lastName));
		Constants constants = new Constants();
		Pet pet = new Pet(constants.CHECK_CLASS_JAVA, constants.CHECK_CLASS_HOGE);
		pet.introduce();

		RobotPet robotPet = new RobotPet(constants.CHECK_CLASS_R2D2, constants.CHECK_CLASS_LUKE);
		robotPet.introduce();

	}

	private static String firstName = "Natsumi";
	private static String lastName = "Kazawa";

	private static String printName(String firstName, String lastName) {
		return firstName + lastName;
	}

}
