import serial
import time

if __name__ == '__main__':
    ser = serial.Serial('COM7', 9600, timeout=1)
    ser.reset_input_buffer()

    try:
        while True:
            ser.write(b"Hello from Raspberry Pi!\n")
            line = ser.readline().decode('utf-8').rstrip()
            print(line)
            time.sleep(1)

    except KeyboardInterrupt:
        print("Exiting the program.")
        ser.close()
