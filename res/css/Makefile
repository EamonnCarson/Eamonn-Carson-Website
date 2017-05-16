#Variable specifying our compiler
CC      = lessc

#Compiler Flags
#	-g			compile with debug information
#	-Wall		give detailed debug information
#	-O0			unoptimized output
#	-std=c99	tells the compiler to use the c99 standard
#	-m64		tells the compiler to compile for a 64 bit system
CFLAGS  = -g -Wall -O0 -std=c99 -m64

#Linker Flags
#	-lm			tells linker to link to the math library
LDFLAGS = -lm

#Sources: what to compile
SOURCES = source.c

#Objects: don't touch
OBJECTS = $(SOURCES:.c=.o)

#Target: name of output file
TARGET  = program

$(TARGET) : $(OBJECTS)
	$(CC) $(CFLAGS) -o $@ $^ $(LDFLAGS)

.PHONY: clean

clean:
	@rm -f $(TARGET) $(OBJECTS) core
