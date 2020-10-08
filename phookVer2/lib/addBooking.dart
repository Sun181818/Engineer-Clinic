import 'package:flutter/material.dart';
import 'package:http/http.dart' as http;
import 'dart:convert';
import 'main.dart';

class AddBooking extends StatefulWidget {
  final List list;
  final int index;
  AddBooking({this.list, this.index});

  @override
  _AddBookingState createState() => _AddBookingState();
}

class _AddBookingState extends State<AddBooking> {
  TextEditingController dateController = TextEditingController();
  TextEditingController timeController = TextEditingController();
  TextEditingController subjectController = TextEditingController();
  TextEditingController detailController = TextEditingController();
  //TextEditingController userTypeController = TextEditingController();
  //TextEditingController pictureController = TextEditingController();

  bool editMode = false;

  addEditUser() {
    if (editMode) {
      var url = 'http://127.0.0.1/DB2/editBooking.php';
      http.post(url, body: {
        'idBooking': widget.list[widget.index]['idBooking'],
        'date': dateController.text,
        'time': timeController.text,
        'subject': subjectController.text,
        'detail': detailController.text,
        //userType
        //picture
      });
    } else {
      var url = 'http://127.0.0.1/DB2/addBooking.php';
      http.post(url, body: {
        'date': dateController.text,
        'time': timeController.text,
        'subject': subjectController.text,
        'detail': detailController.text,
        //userType
        //picture
      });
    }
  }

  @override
  void initState() {
    if (widget.index != null) {
      editMode = true;
      dateController.text = widget.list[widget.index]['date'];
      timeController.text = widget.list[widget.index]['time'];
      subjectController.text = widget.list[widget.index]['subject'];
      detailController.text = widget.list[widget.index]['detail'];
       //userType
        //picture
    }
    super.initState();
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text(editMode ? 'Edit' : 'Add Booking'),
      ),
      body: ListView(
        children: <Widget>[
          Padding(
            padding: const EdgeInsets.all(8.0),
            child: TextField(
              controller: dateController,
              decoration: InputDecoration(labelText: 'Date'),
            ),
          ),
          Padding(
            padding: const EdgeInsets.all(8.0),
            child: TextField(
              controller: timeController,
              decoration: InputDecoration(labelText: 'Time'),
            ),
          ),
          Padding(
            padding: const EdgeInsets.all(8.0),
            child: TextField(
              controller: subjectController,
              decoration: InputDecoration(labelText: 'Subject'),
            ),
          ),
          Padding(
            padding: const EdgeInsets.all(8.0),
            child: TextField(
              controller: detailController,
              decoration: InputDecoration(labelText: 'Detail'),
            ),
          ),
          //userType
          //picture
          Padding(
            padding: EdgeInsets.all(8),
            child: RaisedButton(
              color: Colors.amber,
              child: Text(editMode ? 'Edit' : 'Save'),
              onPressed: () {
                addEditUser();
                Navigator.push(
                  context,
                  MaterialPageRoute(
                    builder: (context) => MyHomePage(),
                  ),
                );
              },
            ),
          ),
        ],
      ),
    );
  }
}
