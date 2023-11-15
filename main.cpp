// Online C++ compiler to run C++ program online
#include <iostream>
#include <string>

using namespace std;


class Car {
    public:
        string brand;
        Car(string brand) {
            this->brand = brand;
        }
        Car(string brand, int mileage) {
            this->brand = brand;
            this->mileage = mileage;
        }
        ~Car() {
            cout << this->brand << " is dead" <<endl;
        }
    private:
        int mileage = 0;
};

int main() {
    // Write C++ code here
    Car* myCar = new Car("Dacia", 19000);
    cout << myCar->brand << endl;
    delete myCar;
    cout << "Hello world! \n";

    return 0;
}