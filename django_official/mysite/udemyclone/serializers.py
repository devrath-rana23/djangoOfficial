from rest_framework import serializers
from udemyclone.models import Coursedetails

class CoursedetailsSerializer(serializers.ModelSerializer):
    class Meta:
        model = Coursedetails
        fields = "__all__"