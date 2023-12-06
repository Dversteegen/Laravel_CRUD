import serial
import mysql.connector

# Configure serial port
ser = serial.Serial('/dev/ACM0', 9600)  # Adjust port based on your system

# Configure MySQL connection
db_config = {
    'host': 'localhost',
    'user': 'testuser',
    'password': 'dany7828',
    'database': 'smarthome',
}
conn = mysql.connector.connect(**db_config)
cursor = conn.cursor()

while True:
    # Read data from Arduino
    data = ser.readline().decode().strip()

    # Insert data into the database
    sql = f"INSERT INTO test (column_name) VALUES ('{data}')"
    cursor.execute(sql)
    conn.commit()

# Close connections when done
ser.close()
cursor.close()
conn.close()