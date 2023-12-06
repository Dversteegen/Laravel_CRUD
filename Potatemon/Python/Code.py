import serial
import mysql.connector
import time

def retrieve_state_from_database():
    # MySQL database connection configuration
    db_config = {
        'host': 'localhost',  # Assuming MySQL is on the same machine
        'user': 'testuser',
        'password': 'dany7828',
        'database': 'smarthome',
    }

    try:
        # Connect to the MySQL database
        connection = mysql.connector.connect(**db_config)
        cursor = connection.cursor()

        # Execute a query to retrieve the state of the White LED
        query = "SELECT state FROM smart_devices WHERE device = 'White Led' LIMIT 1"
        cursor.execute(query)

        # Fetch the result
        result = cursor.fetchone()

        # Close the database connection
        cursor.close()
        connection.close()

        return result[0] if result else None

    except mysql.connector.Error as e:
        print(f"Error: {e}")
        return None

def send_state_to_arduino(state, port='/dev/ttyACM0', baudrate=9600):
    try:
        # Open the serial port
        with serial.Serial(port, baudrate, timeout=1) as ser:
            # Wait for the Arduino to initialize
            time.sleep(2)

            # Send the state to the Arduino
            ser.write(f'{state}\n'.encode())

            print(f"State sent to Arduino: {state}")

    except serial.SerialException as e:
        print(f"Error: {e}")

# Continuous operation
while True:
    # Example: Retrieve state from the database and send it to the Arduino
    retrieved_state = retrieve_state_from_database()

    if retrieved_state is not None:
        send_state_to_arduino(retrieved_state)
    else:
        print("Failed to retrieve state from the database.")

    # Add a delay to control the frequency of database queries
    time.sleep(0.1)  # Adjust the delay as needed
