#!/bin/bash

HOST="0.0.16.146"
PORT="22"

echo "SSH Connection Troubleshooting for $HOST:$PORT"
echo "================================================"

echo "1. Testing basic connectivity..."
ping -c 3 $HOST

echo -e "\n2. Testing port connectivity..."
nc -zv $HOST $PORT 2>&1

echo -e "\n3. Checking routing table..."
route -n get $HOST 2>/dev/null || echo "No specific route found"

echo -e "\n4. Testing with telnet..."
timeout 5 telnet $HOST $PORT 2>&1 || echo "Telnet connection failed"

echo -e "\n5. Checking local network interface..."
ifconfig | grep inet

echo -e "\nTroubleshooting suggestions:"
echo "- Verify the IP address is correct"
echo "- Check if you're on the same network/VPN"
echo "- Confirm the target host is powered on"
echo "- Verify SSH service is running on the target"
echo "- Check firewall rules on both ends"
