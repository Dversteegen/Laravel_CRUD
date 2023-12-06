import serial
import time
import mysql.connector

def get_led_state():
    # Create a connection to the MySQL database
    connection = mysql.connector.connect(
        host='localhost',
        user='testuser',
        password='dany7828',
        database='smarthome'
    )

    # Create a cursor object to execute SQL queries
    cursor = connection.cursor()

    # Execute a query to fetch the state of the 'White Led' device
    query = "SELECT state FROM smart_devices WHERE device = 'White Led'"
    cursor.execute(query)

    # Fetch the result
    result = cursor.fetchone()

    # Close the database connection
    connection.close()

    # Return the state if available, otherwise return a default value
    return result[0] if result is not None else '0'

def get_rgb_state():
    # Create a connection to the MySQL database
    connection = mysql.connector.connect(
        host='192.168.101.47',
        user='testuser',
        password='dany7828',
        database='smarthome'
    )

    # Create a cursor object to execute SQL queries
    cursor = connection.cursor()

    # Execute a query to fetch the state of the 'White Led' device
    query = "SELECT state FROM smart_devices WHERE device = 'RGB Module'"
    cursor.execute(query)

    # Fetch the result
    result = cursor.fetchone()

    # Close the database connection
    connection.close()

    # Return the state if available, otherwise return a default value
    return result[0] if result is not None else '0'

if __name__ == '__main__':
    ser = serial.Serial('COM7', 9600, timeout=1)
    ser.reset_input_buffer()

    try:
        while True:
            # Get the state of the 'White Led' from the database
            full_rgb = get_rgb_state()

            # Split the RGB string into individual values
            red, green, blue = map(int, full_rgb.split(', '))

            # print("Red:", red)
            # print("Green:", green)
            # print("Blue:", blue)

            rgb_state = "RGB: Red" + str(red) + ", Green" + str(green) + ", Blue" + str(blue)

            # Send the state to the Arduino
            ser.write(rgb_state.encode('utf-8') + b'\n')

            # Print the received message from the Arduino
            line = ser.readline().decode('utf-8').rstrip()
            print(line)

            time.sleep(1)

    except KeyboardInterrupt:
        print("Exiting the program.")
        ser.close()

# import serial
# import time
# import mysql.connector

# def get_device_state(device_name):
#     # Create a connection to the MySQL database
#     connection = mysql.connector.connect(
#         host='192.168.101.47',
#         user='testuser',
#         password='dany7828',
#         database='smarthome'
#     )

#     # Create a cursor object to execute SQL queries
#     cursor = connection.cursor()

#     # Execute a query to fetch the state of the specified device
#     query = f"SELECT state FROM smart_devices WHERE device = '{device_name}'"
#     cursor.execute(query)

#     # Fetch the result
#     result = cursor.fetchone()

#     # Close the database connection
#     connection.close()

#     # Return the state if available, otherwise return a default value
#     return result[0] if result is not None else '0'

# if __name__ == '__main__':
#     ser = serial.Serial('COM7', 9600, timeout=1)
#     ser.reset_input_buffer()

#     try:
#         while True:
#             # Get the state of the 'White Led' from the database
#             white_led_state = get_device_state('White Led')
#             print("Led", white_led_state)

#             # Get the state of the 'RGB Module' from the database
#             full_rgb = get_device_state('RGB Module')
#             red, green, blue = map(int, full_rgb.split(', '))
#             print("Red:", red)
#             print("Green:", green)
#             print("Blue:", blue)

#             rgb_state = f"RGB: Red{red}, Green{green}, Blue{blue}"

#             # Send the state to the Arduino
#             ser.write(rgb_state.encode('utf-8') + b'\n')

#             # Print the received message from the Arduino
#             line = ser.readline().decode('utf-8').rstrip()
#             print(line)

#             time.sleep(1)

#     except KeyboardInterrupt:
#         print("Exiting the program.")
#         ser.close()
